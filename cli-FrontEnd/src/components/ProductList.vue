<template>
    <div>
      <h1>Lista de Produtos</h1>
      <ul>
        <li v-for="product in products" :key="product.id">
          {{ product.name }} - Quantidade: {{ product.quantity }} - Preço: {{ product.price }}
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  
  export default {
    name: 'ProductList',
    setup() {
      const products = ref([]);
  
      const fetchProducts = () => {
        axios.get('/api/products')
          .then(response => {
            products.value = response.data;
          })
          .catch(error => {
            console.error(error);
          });
      };
  
      onMounted(() => {
        fetchProducts();
      });
  
      return {
        products,
      };
    },
  };
  </script>
  