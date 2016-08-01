const showMessage = ($el, message) => {
	$el.html(message)
	$el.addClass("message-show").delay(3000).queue(() => {
		$el.removeClass("message-show").dequeue()
	})
}

export default () => {
	let error

	$(".ajax-form").on("submit", function(e) {
		e.preventDefault()

		const $form = $(this)

		const $message = $form.find(".ajax-form-message")
		const $messageError = $form.find(".ajax-form-error")
		const $errorName = $form.find(".error-name")
		const $errorEmail = $form.find(".error-email")

		const url = $form.attr("action")
		const method = $form.attr("method")
		const data = $form.serialize()

		$.ajax({
			url,
			method,
			data,
			dataType: "JSON",
			success: (res) => {
				if (res.message) {
					showMessage($message, res.message)
				} else if (error = res.error) {
					if (error.name) {
						showMessage($errorName, error.name)
					} else if (error.email) {
						showMessage($errorEmail, error.email)
					}
				}
			},
			error: () => {
				showMessage($messageError, "Something went wrong, please try again later.")
			},
		})
	})
}