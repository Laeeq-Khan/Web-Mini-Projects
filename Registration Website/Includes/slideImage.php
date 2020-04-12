<style>
    .shadow1{
        box-shadow: 2px 2px 10px gray;
       
    }
    
     a:link{
            color: red;
        }
        a:hover{
            color: red;
        }
</style>
 <p class="headline"> <a href="Registration.php" > <marquee> Register Now . First Time online registration in UOS Sub Campus Mianwali . Last date of Registration 1 Jan 2018 </marquee></a> </p> 
        <hr>   
        
<div class="slider shadow1 " id="main-slider"><!-- outermost container element -->
	<div class="slider-wrapper"><!-- innermost wrapper element -->
		<img src="Icons/0.jpg" alt="First" class="slide  img-thumbnail" /><!-- slides -->
		<img src="Icons/1.jpg" alt="Second" class="slide img-thumbnail" />
		<img src="Icons/2.jpg" alt="Third" class="slide img-thumbnail"  />
	</div>
</div>	



<style>

html,body {
	margin: 0;
	padding: 0;
}
.slider {
	width: 1024px;
	margin: 2em auto;
	
}

.slider-wrapper {
	width: 100%;
	height: 400px;
	position: relative;
}

.slide {
	float: left;
	position: absolute;
	width: 100%;
	height: 100%;
	opacity: 0;
	transition: opacity 3s linear;
}

.slider-wrapper > .slide:first-child {
	opacity: 1;
}

</style>


<script>

(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".slide" );
			this.previous = this.el.querySelector( ".slider-previous" );
			this.next = this.el.querySelector( ".slider-next" );
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
				
			}, 3000);
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

</script>