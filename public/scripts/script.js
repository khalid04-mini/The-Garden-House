// underline li a when clicked
let carticon = document.querySelector('ul#list li.carticon');
let cart = document.getElementById('cart');
// cart.style.display = 'none';
carticon.addEventListener('mouseout', function(){
	cart.style.display = 'none';
})
carticon.addEventListener('mouseover', function(){
	cart.style.display = 'block';
})




let lis = document.querySelectorAll('ul#list li a');




lis.forEach(element => {
  
  element.addEventListener('click',function(e){
        for (let i = 0; i < lis.length; i++) {

            lis[i].classList.remove('lign');   
        }    
        e.target.classList.add('lign'); 
    })
});


//   end underline li a when clicked






// start images  slider  

(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".home .slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".home .slide" );
			this.previous = this.el.querySelector( ".home .slider-previous" );
			this.next = this.el.querySelector( ".home .slider-next" );
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;
			
			this.action();
			this.stopStart();	
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide];
			currentSlide.style.opacity = 1;
			
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
				}
			}
		},
		action: function() {
			var self = this;
			self.timer = setInterval(function() {
				self.index++;
				if( self.index == self.slides.length ) {
					self.index = 0;
				}
				self._slideTo( self.index );
				
			}, 5000);
		},
		stopStart: function() {
			var self = this;
			self.el.addEventListener( "mouseover", function() {
				clearInterval( self.timer );
				self.timer = null;
				
			}, false);
			self.el.addEventListener( "mouseout", function() {
				self.action();
				
			}, false);
		}
		
		
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		
		var slider = new Slideshow( "#main-slider" );
		
	});
	
	
})();


// end image slider



// scroll Y

// get header 
let head = document.querySelector('.head');



window.setInterval( function() {
	if (window.scrollY > 70){
		head.classList.remove('page-header')
		head.classList.add('page-header-fix')
	}
	else{
		
		head.classList.remove('page-header-fix')
		head.classList.add('page-header')
	}
},0)




// show cart div


