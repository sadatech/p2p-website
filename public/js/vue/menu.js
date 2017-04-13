Vue.component('menu', {
	template: '#menu-template',

	props: ['list'],
	created(){
		this.list = JSON.parse(this.list);
	}
});

new Vue({
	el: "body"
})