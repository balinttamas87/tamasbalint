

export default () => {

	const hamburger = $(".hamburger")
	const mobileMenu = $(".mobile-menu")
	const menuEvents = (e) => {
		e.preventDefault()
		hamburger.toggleClass("is-active")
		mobileMenu.toggleClass("mobile-menu_show")	
	}

	$("button.hamburger").click(menuEvents)
	$(".mobile-menu a").click(menuEvents)
}
