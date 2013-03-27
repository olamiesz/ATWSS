#!/usr/bin/env node
var hogan = require('hogan.js')
  , fs    = require('fs')
  , prod  = process.argv[2] == 'production'
  , title = 'ATWSS'

var layout, pages

// compile layout template
layout = fs.readFileSync(__dirname + '/../templates/layout.mustache', 'utf-8')
layout = hogan.compile(layout, { sectionTags: [{o:'_i', c:'i'}] })

// retrieve pages
pages = fs.readdirSync(__dirname + '/../templates/pages')

// iterate over pages
pages.forEach(function (name) {

  if (!name.match(/\.mustache$/)) return

  var page = fs.readFileSync(__dirname  + '/../templates/pages/' + name, 'utf-8')
    , context = {}

  context[name.replace(/\.mustache$/, '')] = 'active'
  context._i = true
  context.production = prod
  context.title = name
    .replace(/\.mustache/, '')
    .replace(/\-.*/, '')
    .replace(/(.)/, function ($1) { return $1.toUpperCase() })

  if (context.title == 'Index') {
    context.title = title
  } else {
    context.title += ' &middot; ' + title
  }

  root = __dirname + '/../'
  videoDirName = 'videos'
  videoDir = fs.readdirSync(root + videoDirName)

  context.interventions = []
  videoDir.forEach(function (name) {
    interventionDirName = videoDirName + '/' + name
    if (fs.statSync(root + interventionDirName).isDirectory()) {
      intervention = {
        "id": name,
        "videos": []
      }
      
      interventionDir = fs.readdirSync(root + interventionDirName)
      interventionDir.forEach(function (name) {
    	  if (name.match(/\.mp4$/) && !name.match(/^\./)) {
    	  
    	    videoName = interventionDirName + '/' + name;
    	    intervention.videos.push({
              "id": videoName.replace(/\.mp4$/, '') 
    	    })
    	  }
      })
      
      context.interventions.push(intervention)    
    }
  })

  page = hogan.compile(page, { sectionTags: [{o:'_i', c:'i'}] })
  page = layout.render(context, {
    body: page
  })

  fs.writeFileSync(__dirname + '/../' + name.replace(/mustache$/, 'php'), page, 'utf-8')
})
