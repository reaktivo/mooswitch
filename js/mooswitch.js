/*
	@description	MooTools based iPhone-like switch button, for replacing checkboxes
	@version		0.7
	@author			Marcel Miranda Ackerman < reaktivo.com >
	@license 		MIT Style License.
	@version		0.6.1
	@date			2008-04-06
	@updated		2009-08-06
	@dependencies	mootools 1.2
	
*/
var MooSwitch = new Class({
	Extends: Drag.Move,
	Implements: [Options],
	
	options: {
		duration: 100,
		labels_outside: true,
		labels: {
			unchecked: 'No',
			checked: 'Yes'
		},
		label_bg: 'light',
		drag_opacity: 1,
		mouse_over_handle: false
	},
	
	
	initialize: function(selector, options){
		
		this.setOptions(options);
		
		this.is_dragging = false;
		
		this.mvalue = 0;
		
		//Create Elements
		this.container = new Element('div', {'class':'switchbox ie_layout'});
		
		this.bg = new Element('div', {'class': 'background'}).inject(this.container);
		
		this.labels = new Element('div', {'class': 'labels'}).inject(this.container);
		this.left_label = new Element('div', {'class':'label left'}).inject(this.labels);
		this.right_label = new Element('div', {'class':'label right'}).inject(this.labels);
		
		this.handle = new Element('div', {'class':'handle'}).inject(this.container);
		
		//Hide Radioboxes and their labels
		this.checkbox = $(selector);
		this.container.inject(this.checkbox, 'after');
		
		if(this.options.label_bg == 'light'){
			this.labels.addClass('light_bg');
		}
		this.left_label.set('text', this.options.labels_outside ? this.options.labels.unchecked : this.options.labels.checked);
		this.right_label.set('text', this.options.labels_outside ? this.options.labels.checked : this.options.labels.unchecked);
		
		if(this.options.labels_outside){
			this.container.setStyle('width', this.left_label.getStyle('width').toInt() + this.bg.getStyle('width').toInt() + this.right_label.getStyle('width').toInt());
			this.container.setStyle('height', this.bg.getStyle('height').toInt());
			this.bg.setStyle('left', this.left_label.getStyle('width').toInt());
			this.bg.setStyle('cursor', 'pointer');
			this.bg.addEvent('click', function(){
				if(!this.mouse_over_handle) {
					this.mvalue = !this.mvalue;
					this.goTo(this.mvalue);
				}
			}.bind(this));
			this.max_scroll = this.bg.getStyle('width').toInt() - this.bg.getStyle('left').toInt();
			
			
		}else{
			this.container.setStyle('width', this.bg.getStyle('width').toInt());
			this.container.setStyle('height', this.bg.getStyle('height').toInt());

			this.max_scroll = this.bg.getStyle('width').toInt() - this.handle.getStyle('width').toInt();
		}
		this.handle.setStyle('left', this.bg.getStyle('left'));
		
		
		if(this.checkbox.checked == true) this.goTo.bind(this, [1, 0])();
	
		this.parent(this.handle, {
			container: this.bg,
			onStart: function (){
				this.is_dragging = true;
				this.handle.morph({'opacity': this.drag_opacity});
			},
			onComplete: function (){
				if(this.handle.getStyle('left').toInt() + (this.handle.getStyle('width').toInt()/2) < this.container.getStyle('left').toInt() + this.container.getStyle('width').toInt()/2) {
					this.goTo(0);
				}else{
					this.goTo(1);
				}
				
			}
		});
		
		//Set Events
		this.left_label.addEvent('click', this.goTo.bind(this, [0]));
		this.right_label.addEvent('click', this.goTo.bind(this, [1]));
		
		this.handle.addEvent('mouseover', function(){
			this.mouse_over_handle = true;
		}.bind(this));
		this.handle.addEvent('mouseout', function(){
			this.mouse_over_handle = false;
		}.bind(this));
		
	},
	goTo: function(value, immediate){
		var cursor = (value==0) ? 'e-resize' : 'w-resize';
		this.handle.setStyle('cursor', cursor);
		duration = immediate ? 0 : this.options.duration;
		this.handle.set('morph', {duration:duration});
		this.handle.morph({
			'left' : this.bg.getStyle('left').toInt() + (this.max_scroll*value),
			'opacity' : 1
		});
		this.mvalue = value;
		this.checkbox.checked = !!value;
		
	}
});
