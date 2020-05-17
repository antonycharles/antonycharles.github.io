var $ = document.querySelector.bind(document);
var $$ = document.querySelectorAll.bind(document);

$("body").onload = function() {
	addEventMenuMobile();
	addEventModal();
	addEventScrollMenu();
	addEventAccordion();
	addAnimacaoBanner();
};

window.onscroll = function() {
	addEventHeaderFixedScroll();
};

function addEventMenuMobile(){

	$('#header-button').addEventListener('click', function() {
		let itens = $$(".header-mobile-show");
		let displayValue = getComputedStyle(itens[0]).display == 'none' ? 'block' : 'none';
		itens.forEach(el => {
			el.style.display = displayValue;
		});

		let button = $(".header-button");
		if(displayValue == 'block'){
			button.classList.add("change");
		}else{
			button.classList.remove("change");
		}

	});
}

function addEventModal(){
	for(let i = 0;i < $$(".modal-open").length;i++){
		$$(".modal-open")[i].onclick = function() {
			let modal = this.getAttribute('data-modal');
			$("#" + modal).style.display = "block";
		}
	}

	for(let i = 0;i < $$(".close").length;i++){
		$$(".close")[i].onclick = function() {
			let modal = $$(".close")[i].parentElement;
			if(modal.parentElement.classList.contains('modal')){
				modal.parentElement.style.display = "none";
			}
		}
	}
	
	window.onclick = function(event){
		if(event.target.classList.contains('modal')){
			event.target.style.display = "none";
		}
	}
}

function addEventScrollMenu(){
	for(let i = 0;i < $$(".sroll-auto").length;i++){
		$$(".sroll-auto")[i].onclick = function(e) {
			e.preventDefault();
			let item = this.getAttribute('href');
			//$(item).scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' });
			window.scroll({top: $(item).offsetTop - 35, behavior: 'smooth'});

			$('#header-button').click();
		}
	}
}

function addEventAccordion(){
	let acc = $$(".accordion");
	let i;
	
	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		let panel = this.nextElementSibling;
		if (panel.style.display == "block") {
		  	panel.style.display = "none";
		} else {
			panel.style.display = "block";
		} 
	  });
	}
}


function addEventHeaderFixedScroll(){
	if (window.pageYOffset > 100) {
		$(".header-top").classList.add("fixed");
	} else {
		$(".header-top").classList.remove("fixed");
	}
}

function addAnimacaoBanner(){
	for(var i = 0; i < 400; i++){
		var div = document.createElement("DIV");
		div.classList.add("banner-bl");
		document.getElementById("banner").appendChild(div);
		animacaoBannerStart(div);
		animacaoBannerLoop(div);
	}
}

function animacaoBannerStart(div){
	setTimeout(function(){
		changeTopLeftDiv(div);
	 },Math.floor(Math.random() * 5000));
}

function animacaoBannerLoop(div){
	setTimeout(function(){ 
		changeTopLeftDiv(div);
		animacaoBannerLoop(div);
	}, 5000 + Math.floor(Math.random() * 3000));
}

function changeTopLeftDiv(div){
	div.style.top =  Math.floor(Math.random() * 100) + "%";
	div.style.left = Math.floor(Math.random() * 100) + "%";
}