const readMoreBtn=document.querySelector('.read-more-btn');
const details=document.querySelector('.details');

readMoreBtn.addEventListener('click',(e)=>{
	details.classList.toggle('Show-more');
	
	if(readMoreBtn.innerText==='Read More'){
	readMoreBtn.innerText='Read Less';}
	else{
	readMoreBtn.innerText='Read More';}
})	

