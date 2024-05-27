<template>
    <div>
      <h1>Client Details</h1>
      <p>Name: {{ client.name }}</p>
      <p>Email: {{ client.email }}</p>
      <p>Phone: {{ client.phone }}</p>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        client: {
          name: 'John Doe',
          email: 'john@example.com',
          phone: '1234567890'
        }
      };
    }
  };
  </script>
  
  <style scoped>
  /* Optional: Add scoped styles for this component */
  </style>
  