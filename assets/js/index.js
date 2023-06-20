const nav = document.querySelector('nav');
const header = document.querySelector('header');

const navObserverCallback = (watchEntry, navObserver) => {
	if (!watchEntry[0].isIntersecting) {
		nav.classList.add('active');
	} else {
		nav.classList.remove('active');
	}
}

const navObserverOptions = {
	rootMargin: '-9px',
	threshold: 0
}

const navObserver = new IntersectionObserver(navObserverCallback, navObserverOptions);

navObserver.observe(header);
