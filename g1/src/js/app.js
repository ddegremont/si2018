import reset from '../style/reset.sass';

const styleEl = document.createElement('style');
styleEl.innerHTML = reset;
document.head.appendChild(styleEl);
