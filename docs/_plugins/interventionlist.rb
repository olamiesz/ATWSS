# Title: Intervention list tag for Jekyll
# Author: Mark Donszelmann
# Description: Looks through the "videos" directory and lists all found videos in different formats in a table
#
# Syntax {% interventionlist [template] %}
#
# Example:
# {% interventionlist my_template.html %}
module Jekyll

  class Intervention
    include Convertible

#    attr_accessor :data, :content
    attr_accessor :interventiondata

    def initialize(site, base, dir, name)
      @site = site

      @interventiondata = Hash.new(0)
      @interventiondata['name'] = name
      @interventiondata['title'] = ""
      @interventiondata['time'] = ""
      @interventiondata['dosimeters'] = '<a href="./dosimeters.php?InterventionID=' + name + '">Plots</a>'
      @interventiondata['videos'] = base
    end
  end


  class InterventionList
    @@interventions = []

    def self.create(site)
      @@interventions = []
      dir = site.config['interventions_dir'] || 'videos'
      base = File.join(site.source, dir)
      return unless File.exists?(base)

      entries  = Dir.chdir(base) { site.filter_entries(Dir['*']) }

      entries.each do |f|
          intervention = Intervention.new(site, site.source, dir, f)
          @@interventions << intervention.interventiondata
      end
    end

    def self.interventions
      @@interventions
    end
  end


  # Jekyll hook - the generate method is called by jekyll, and generates all of the category pages.
  class GenerateInterventions < Generator
    safe true
    priority :low

    def generate(site)
      InterventionList.create(site)
    end
  end


  class InterventionlistTag < Liquid::Tag
    def initialize(tag_name, markup, tokens)
      @interventions = InterventionList.interventions
      @template_file = markup.strip
      super
    end

    def load_template(file, context)
      includes_dir = File.join(context.registers[:site].source, '_includes')

      if File.symlink?(includes_dir)
        return "Includes directory '#{includes_dir}' cannot be a symlink"
      end

      if file !~ /^[a-zA-Z0-9_\/\.-]+$/ || file =~ /\.\// || file =~ /\/\./
        return "Include file '#{file}' contains invalid characters or sequences"
      end

      Dir.chdir(includes_dir) do
        choices = Dir['**/*'].reject { |x| File.symlink?(x) }
        if choices.include?(file)
          source = File.read(file)
        else
          "Included file '#{file}' not found in _includes directory"
        end
      end

    end

    def render(context)
      output = super
      template = load_template(@template_file, context)

      Liquid::Template.parse(template).render('interventions' => @interventions).gsub(/\t/, '')
    end
  end


end

Liquid::Template.register_tag('interventionlist', Jekyll::InterventionlistTag)
