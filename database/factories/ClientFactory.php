<template>
  <MyLayout>
    <div class="about-me">
      <h2>Company Information</h2>
      <hr class="hr"/>
      <p>Our Company have a, a dedicated web developer passionate about building interactive and user-friendly websites. With a strong foundation in front-end development technologies like HTML, CSS, and JavaScript, I bring creative solutions to life. I thrive on challenges and continuously expand my skills to stay updated with the latest trends and best practices in the industry.</p>

      <!-- Button to open the client modal -->
      <button @click="openClientModal" class="client-button">Client</button>
      
      <!-- Modal for client information -->
      <div class="modal" :class="{ 'show': isClientModalOpen }">
        <div class="modal-content">
          <span class="close" @click="closeClientModal">&times;</span>
          <h3>Client Information</h3>
          <div v-if="client">
            <p>Name: {{ client.name }}</p>
            <p>Email: {{ client.email }}</p>
            <!-- Add more client information here -->
          </div>
        </div>
      </div>

      <!-- Social Media Buttons -->
      <div class="social-media-buttons">
        <!-- Social media buttons here -->
      </div>
    </div>
  </MyLayout>
</template>

<script setup>
import MyLayout from '../Layouts/MyLayout.vue';
import { ref } from 'vue';

const isClientModalOpen = ref(false);
const client = ref(null);

const openClientModal = () => {
  // Generate a new client object using the factory method
  client.value = createClient('John Doe', 'john.doe@example.com');
  isClientModalOpen.value = true;
};

const closeClientModal = () => {
  isClientModalOpen.value = false;
};

// Client factory method
const createClient = (name, email) => {
  return {
    name,
    email,
    // Add more properties as needed
  };
};
</script>

<style scoped>
/* Styles for the modal */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

/* Modal content */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
  border-radius: 5px;
}

/* Close button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* Show modal when its value is true */
.show {
  display: block;
}
</style>
