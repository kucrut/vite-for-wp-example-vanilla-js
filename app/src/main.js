import { app } from "./app.js";

import "./main.css";

window.addEventListener("DOMContentLoaded", app);

// See https://vitejs.dev/guide/api-hmr.html
if (import.meta.hot) {
	import.meta.hot.accept("./app.js", (new_app) => {
		new_app?.app();
	});
}
