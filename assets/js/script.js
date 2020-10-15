const header = {
	fixedHeaderScroll(){
		if (window.pageYOffset > 100) {
			document.getElementById("header-top").classList.add("fixed");
		} else {
			document.getElementById("header-top").classList.remove("fixed");
		}
	},

	scrollLink(ahref,ahrefEvent){
		ahrefEvent.preventDefault();
		let item = ahref.getAttribute('href');
		window.scroll({
			top: document.querySelector(item).offsetTop - 35, 
			behavior: 'smooth'
		});
		if(ahref.dataset.logo == undefined){
			document.querySelector('#header-button').click();
		}
	},

	changeMenuMobile(){
		let itens = document.querySelector(".header-mobile-show");
		let displayValue = itens.style.display == 'none' ? 'block' : 'none';
		itens.style.display = displayValue;

		let button = document.querySelector(".header-button");
		if(displayValue == 'block'){
			button.classList.add("change");
		}else{
			button.classList.remove("change");
		}
	}
}
window.onscroll = function() {header.fixedHeaderScroll();};

const modal = {
    openModal(button){
        document.getElementById(button.dataset.modal).style.display = "block";
    },

    closeModal(close){
        let modalOpen = close.parentElement;
        if(modalOpen.parentElement.classList.contains('modal')){
            modalOpen.parentElement.style.display = "none";
        }
    },

    closeModalOnclickWindow(event){
        if(event.target.classList.contains('modal')){
            event.target.style.display = "none";
        }
    }
}
window.onclick = function(event){modal.closeModalOnclickWindow(event);}


const accordion = {
    changePanel(button){
		button.classList.toggle("active");
        let panel = button.nextElementSibling;
		if (panel.style.display == "block") {
		  	panel.style.display = "none";
		} else {
			panel.style.display = "block";
		}
    }
}

const bannerMatrix = {
	constructor(){
		this.palco = document.getElementById("animacao");
		this.ctx = this.palco.getContext("2d");
	
		this.palco.height = document.getElementById("banner").offsetHeight;
		this.palco.width = document.getElementById("banner").offsetWidth;
	
		this.chinese = "田由甲申甴电甶男甸甹町画甼甽甾甿畀畁畂畃畄畅畆畇畈畉畊畋界畍畎畏畐畑";
		this.chinese = this.chinese.split("");
	
		this.font_size = 16;
		this.columns = this.palco.width/this.font_size;
		this.drops = [];
	
		for(var x = 0; x < this.columns; x++)
			this.drops[x] = 1; 
	},
	
	draw(){
		this.ctx.fillStyle = "rgba(122, 130, 171, 0.2)";
		this.ctx.fillRect(0, 0, this.palco.width, this.palco.height);
		
		this.ctx.fillStyle = "#FFF";
		this.ctx.font = this.font_size + "px arial";
		for(var i = 0; i < this.drops.length; i++)
		{
			let text = this.chinese[Math.floor(Math.random()*this.chinese.length)];
			this.ctx.fillText(text, i*this.font_size, this.drops[i]*this.font_size);
			if(this.drops[i]*this.font_size > this.palco.height && Math.random() > 0.975)
				this.drops[i] = 0;
			
			this.drops[i]++;
		}
	}
}

document.querySelector("body").onload = function() {
	bannerMatrix.constructor();
	setInterval(function(){bannerMatrix.draw();}, 50);
};