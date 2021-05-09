/********************
TopPage Slider
********************/
var slider=document.querySelector('.wp-block-group.is-style-slider .wp-block-group__inner-container');
var slideIndex=1;
if(slider){
	var slideAmount=slider.querySelectorAll('.wp-block-cover').length;
}

if(slideAmount==1){
	slider.style.transform='translate(0vw)';
	slider.style.transition='translate 0s';
}

if(slider && slideAmount>1){
	var coverList=slider.querySelectorAll('.wp-block-cover');
	var coverListLength=coverList.length;
	var lastCover=coverList[coverListLength-1].cloneNode('deep');

	slider.insertBefore(lastCover, slider.firstElementChild);

	var dotsEl=document.createElement('div');
	dotsEl.classList.add('dots');
	slider.parentElement.appendChild(dotsEl);

	for(i=0;i<coverListLength;i++){
		var dotEl=document.createElement('div');
		dotEl.classList.add('dot');
		dotEl.setAttribute('data-index', i+1);
		if(i==0){
			dotEl.classList.add('active');
		}
		dotsEl.appendChild(dotEl);
		dotEl.addEventListener('click', function(){
			changeSlide(this.getAttribute('data-index'));
		})
	}

	/*
	0 -> fake(4)
	1 -> 第1枚
	2 -> 第2枚
	3 -> 第3枚
	4 -> 第4枚
	*/

	function sliding(){
		if(slideIndex==coverListLength){
			slideIndex=0;
			slider.style.transition='none';
			slideMove(slideIndex);
			window.setTimeout(function(){
				slider.style.transition='transform 0.3s';
				slideIndex=1;
				slideMove(slideIndex);
				dotActive(slideIndex);
			}, 50);

			
			
		}else{
			slideIndex++;
			slideMove(slideIndex);
			dotActive(slideIndex);
		}
	}
	
	var slideTimer=window.setInterval(sliding, 5000);
}

function slideMove(idx){
	slider.style.transform='translate(-'+idx+'00vw)';
}

function dotActive(idx){
	document.querySelector('.dot.active').classList.remove('active');
	document.querySelectorAll('.dot')[idx-1].classList.add('active');
}

function changeSlide(delegateIndex){
	slideIndex=delegateIndex;
	slideMove(slideIndex);
	dotActive(slideIndex);
	clearInterval(slideTimer);
	slideTimer=setInterval(sliding, 5000);
}

/********************
Full Menu Show
********************/
function showMenu(ths){

	var scrollBarWidth=innerWidth-document.body.clientWidth;
	var headerOriginPaddingRight=parseInt(getComputedStyle(header).paddingRight.replace('px', ''));
	
	if(document.body.classList.contains('menu-open')){
		document.body.style.paddingRight='';
		ths.style.paddingRight='';
		header.style.paddingRight='';
	}else{
		document.body.style.paddingRight=scrollBarWidth+'px';
		ths.style.paddingRight=scrollBarWidth+'px';
		header.style.paddingRight=scrollBarWidth+headerOriginPaddingRight+'px';
	}

	document.body.classList.toggle('menu-open');
	
}

/********************
Relates Slide
********************/
function relatesToLeft(){
	var relateSlideWrapper=document.querySelector('.relates-slide-wrapper');
	relateSlideWrapper.scrollLeft-=230;
}

function relatesToRight(){
	var relateSlideWrapper=document.querySelector('.relates-slide-wrapper');
	relateSlideWrapper.scrollLeft+=230;
}