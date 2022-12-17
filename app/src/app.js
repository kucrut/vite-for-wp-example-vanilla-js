export function app() {
	const app_el = document.getElementById("my-app");

	if (!app_el) {
		return;
	}

	const button_el = app_el.querySelector("button");
	if (!button_el) {
		return;
	}

	const count_el = button_el.querySelector("span");
	if (!count_el) {
		return;
	}

	let current_count = parseInt(count_el.innerText);

	button_el.addEventListener("click", function (event) {
		event.preventDefault();
		current_count += 1;

		count_el.innerText = current_count;
	});
}
