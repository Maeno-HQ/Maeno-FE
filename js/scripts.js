/*!
* Start Bootstrap - The Big Picture v5.0.4 (https://startbootstrap.com/template/the-big-picture)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-the-big-picture/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

function getUniqueValues()
{
	fetch('http://maeno-backend-service.maeno-be.svc.cluster.local:3000/seed') // returns a promise
  	.then(response => response.json()) // converting promise to JSON
  	.then(seed => document.getElementById('w3review').value = JSON.stringify(seed))
}
