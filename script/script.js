class Header{
	fixedHeaderScroll(){
		if (window.pageYOffset > 100) {
			document.getElementById("header-top").classList.add("fixed");
		} else {
			document.getElementById("header-top").classList.remove("fixed");
		}
	}

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
	}

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

class Modal{
    openModal(button){
        document.getElementById(button.dataset.modal).style.display = "block";
    }

    closeModal(close){
        let modalOpen = close.parentElement;
        if(modalOpen.parentElement.classList.contains('modal')){
            modalOpen.parentElement.style.display = "none";
        }
    }

    closeModalOnclickWindow(event){
        if(event.target.classList.contains('modal')){
            event.target.style.display = "none";
        }
    }
}

class Accordion{
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

var accordion = new Accordion();

var header = new Header();
window.onscroll = function() {header.fixedHeaderScroll();};

var modal = new Modal();
window.onclick = function(event){modal.closeModalOnclickWindow(event);}

document.querySelector("body").onload = function() {
	var c = document.getElementById("animacao");
	var ctx = c.getContext("2d");

	c.height = document.getElementById("banner").offsetHeight;
	c.width = document.getElementById("banner").offsetWidth;

	var chinese = "田由甲申甴电甶男甸甹町画甼甽甾甿畀畁畂畃畄畅畆畇畈畉畊畋界畍畎畏畐畑";
	chinese = chinese.split("");

	var font_size = 16;
	var columns = c.width/font_size;
	var drops = [];

	for(var x = 0; x < columns; x++)
		drops[x] = 1; 

	function draw()
	{
		ctx.fillStyle = "rgba(122, 130, 171, 0.2)";
		ctx.fillRect(0, 0, c.width, c.height);
		
		ctx.fillStyle = "#FFF";
		ctx.font = font_size + "px arial";
		for(var i = 0; i < drops.length; i++)
		{
			var text = chinese[Math.floor(Math.random()*chinese.length)];
			ctx.fillText(text, i*font_size, drops[i]*font_size);
			if(drops[i]*font_size > c.height && Math.random() > 0.975)
				drops[i] = 0;
			
			drops[i]++;
		}
	}

	setInterval(draw, 50);
};