const keys = document.querySelectorAll('.key')
keys.forEach(key => key.addEventListener('transitionend', removeTransition));

function removeTransition(e){
  if(e.proertyName !== 'transform') return;
  console.log(e.);
  this.classlist.remove('playing');
}

window.addEventListener('keydown', function(e){
  const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
  const key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
  if(!audio)return;
  audio.CurrentTime = 0;
  audio.play();
  key.classlist.add('playing');

})
