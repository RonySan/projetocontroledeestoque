import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import ProductList from './components/ProductList.vue';
import { createApp } from 'vue';
import App from './App.vue';


createApp(App).mount('#app')

const app = createApp(App);

app.component('product-list', ProductList);

app.mount('#app');
