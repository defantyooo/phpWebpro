const form = document.querySelector('#tweet-form');
const input = document.querySelector('#tweet-input');
const display = document.querySelector('#tweet-display');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  const tweet = input.value;
  input.value = '';
  const tweetElement = document.createElement('div');
  tweetElement.classList.add('tweet');
  tweetElement.innerText = tweet;
  display.appendChild(tweetElement);
});
