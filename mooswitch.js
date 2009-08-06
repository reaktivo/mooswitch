/*
 @description	MooTools based iPhonesque switch button
 @author		Marcel Miranda Ackerman < reaktivo.com >
 @license 		MIT Style License.
 @version		0.6.1
 @date			2008-04-06
 @dependencies		mootools 1.2
*/
var mooSwitch = new Class({
	Extends: Drag.Move,
	initialize: function(radios, params){
		params = params || [];
		this.duration = params.duration || 100;
		this.hide_radios = (params.hide_radios != undefined) ? params.hide_radios : true;
		this.hide_labels = (params.hide_labels != undefined) ? params.hide_labels : false;
		this.label_position = (params.label_position != undefined) ? params.label_position : 'outside';
		this.drag_opacity = (params.drag_opacity != undefined) ? params.drag_opacity : 1;
		this.mouse_over_handle = false;
		
		this.is_dragging = false;
		if(this.label_position == 'outside' && params.label_bg == undefined){
			this.label_bg = 'light';
		}else{
			this.label_bg = (params.label_bg != undefined) ? params.label_bg : 'dark';
		}
		this.mvalue = 0;
		
		//Create Elements
		this.container = new Element('div', {'class':'switchbox ie_layout'});
		
		this.bg = new Element('div', {'class': 'background'}).inject(this.container);
		
		this.labels = new Element('div', {'class': 'labels'}).inject(this.container);
		this.left_label = new Element('div', {'class':'label left'}).inject(this.labels);
		this.right_label = new Element('div', {'class':'label right'}).inject(this.labels);
		
		this.handle = new Element('div', {'class':'handle'}).inject(this.container);
		
		//Hide Radioboxes and their labels
		this.radio_el = $$('input[name='+radios+']');
		this.container.inject(this.radio_el[this.radio_el.length-1], 'after');
		
		if(this.label_bg == 'light'){
			this.labels.addClass('light_bg');
		}
		if(this.label_position=='outside'){
			this.container.setStyle('width', this.left_label.getStyle('width').toInt() + this.bg.getStyle('width').toInt() + this.right_label.getStyle('width').toInt());
			this.container.setStyle('height', this.bg.getStyle('height').toInt());
			this.bg.setStyle('left', this.left_label.getStyle('width').toInt());
			this.bg.setStyle('cursor', 'pointer');
			this.bg.addEvent('click', function(){
				if(!this.mouse_over_handle) {
					if(this.mvalue==0){
						this.mvalue = 1;
					}else{
						this.mvalue = 0;
					}
					this.goTo(this.mvalue);
				}
			}.bind(this));
			this.maxscroll = this.bg.getStyle('width').toInt() - this.bg.getStyle('left').toInt();
		}else{
			this.container.setStyle('width', this.bg.getStyle('width').toInt());
			this.container.setStyle('height', this.bg.getStyle('height').toInt());
			this.maxscroll = this.bg.getStyle('width').toInt() - this.handle.getStyle('width').toInt();
		}
		this.handle.setStyle('left', this.bg.getStyle('left'));
		this.radio_el.each(function(item,index){
			if(this.hide_radios) {
				item.setStyle('display', 'none');
				$$('label[for=' + item.get('id') + ']').setStyle('display', 'none');
			}
			
			if(item.checked == true) this.goTo.bind(this, [index, 0])();
			var opttext = $$('label[for=' + item.get('id') + ']')[0].get('text');
			this.container.getElements('.label')[index].set('text', opttext);
			//console.log(this.container.getElements('.label')[index].get('text'));
		
		}.bind(this));
		
		//Execute Drag.Move initialize function
		this.parent(this.handle, {
			container: this.bg,
			onStart: function (){
				this.is_dragging = true;
				this.handle.morph({'opacity': this.drag_opacity});
			},
			onComplete: function (){
				//var handle_middle = this.handle.getStyle('left').toInt() - this.bg.getStyle('left').toInt() + (this.handle.getStyle('width').toInt());
				//var maxscroll_middle = this.bg.getStyle('left').toInt() + (this.maxscroll/2);
				//if(handle_middle < maxscroll_middle){
					
					
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
		
		if(this.hide_labels){
			this.labels.setStyle('display', 'none');
		}
	},
	goTo: function(value, duration){
		var cursor = (value==0) ? 'e-resize' : 'w-resize';
		this.handle.setStyle('cursor', cursor);
		duration = duration || this.duration;
		this.handle.set('morph', {duration:duration});
		this.handle.morph({
			'left' : this.bg.getStyle('left').toInt() + (this.maxscroll*value),
			'opacity' : 1
		});
		
		this.mvalue = value;
		this.radio_el[value].checked = true;
	}
});
