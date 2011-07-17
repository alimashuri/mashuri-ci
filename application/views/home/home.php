<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<h2>Welcome</h2> 
	<p> 
	
	<script src="http://widgets.twimg.com/j/2/widget.js"></script> 
	<script> 
	new TWTR.Widget({
	  version: 2,
	  type: 'profile',
	  rpp: 8,
	  interval: 3000,
	  width: 650,
	  height: 300,
	  theme: {
		shell: {
		  background: '#333333',
		  color: '#ffffff'
		},
		tweets: {
		  background: '#333333',
		  color: '#f2f2f2',
		  links: '#79a325'
		}
	  },
	  features: {
		scrollbar: false,
		loop: true,
		live: true,
		hashtags: true,
		timestamp: true,
		avatars: false,
		behavior: 'default'
	  }
	}).render().setUser('ali_mashuri').start();
	</script> 
	</p> 
