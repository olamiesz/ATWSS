---
layout: default
title: Overview
lead: ATLAS Wireless Safety System
slug: overview
dir: ..
---
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-5 column">
                    <h3>Project</h3>
                    <p>The ATLAS Wireless Safety System is designed and used to help workers
                    in the cavern of the <a href="http://www.cern.ch/atlas">ATLAS experiment</a> at 
                    <a href="http://www.cern.ch">CERN</a> to execute their maintenance tasks. 
                    As these tasks can be
                    difficult and as there may be some radiation levels, the worker may need to execute 
                    the task as fast as possible.<p>
                    <p>In its initial phase the ATWSS system will just monitor the execution of tasks done
                    by the user. In a later phase ATWSS will be extended to use augmented reality to guide
                    the worker with on-the-fly instructions on what he needs to do. This phase is
                    part of the <a href="http://www.cern.ch/edusafe">EDUSAFE</a> programme.</p>
                    
                    <h3>System</h3>
                    <p>The System consists of a Camera with headlights,
                    a Communication box (PTU) and a separate Radiation monitor, 
                    all shown worn by the worker in the picture. The three items communicate with
                    eachother and with a server, via wireless network, 
                    which allows a supervisor to monitor any measured
                    value (Radiation, CO<sub>2</sub>, O<sub>2</sub>, Temperature, ...) around the worker
                    but also the live videostream captured by the camera on his helmet.</p>
				</div>
				<div class="col-md-7 column">
                    <img src="../img/worker1.jpg" width="100%"></img>
				</div>
			</div>
			<div class="row clearfix" style="margin-top: 25px;">
				<div class="col-md-4 column">
                    <img src="../img/equipment1.jpg" width="100%"></img>
                </div>
				<div class="col-md-4 column">
                    <img src="../img/electronics1.jpg" width="100%"></img>
				</div>
				<div class="col-md-4 column">
                    <h3>Equipment</h3>
                    <p>The equipment consists of a standard radiation monitor (not shown), a camera
                    and lights, to be mounted on a safety helmet, connected to a communication box
                    which also houses devices to do measure oxygen, carbon-dioxide and others. The box communicates
                    with the radiation monitor and with a server.</p>
                    <p>The server records all the information (video, audio and measurements) in a database
                    for playback later on. The server also provides a "live" feed to the User Interface.</p>
				</div>
			</div>
			<div class="row clearfix" style="margin-top: 25px;margin-bottom: 25px;">
				<div class="col-md-5 column">
                    <h3>User Interface</h3>
                    <p>The User Interface is a Web Application, which runs both on a desktop or on a mobile device
                    inside a web browser. It shows the camera feeds from each of the workers, the measurements, 
                    and time-plots of these
                    measurements and alarms for values going out of range. It also allows settings to be changed 
                    on individual worker communication boxes</p>
				</div>
				<div class="col-md-7 column">
                    <img src="../img/gui1.jpg" width="100%"></img>
				</div>
			</div>
		</div>
	</div>
</div>
