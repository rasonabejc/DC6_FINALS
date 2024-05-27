<script setup>
import { ref } from 'vue';
import MyLayout from '../Layouts/MyLayout.vue';

// Define a reactive reference for cards
const cards = ref([
  { 
    imageUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrHFkLkW1o6JXZ0HK4CSmtaZGPcuR06AH5fg&s', // Direct link to the image of the document management system
    title: 'LENOVO', 
    description: ' As the largest computer maker at the time of writing, it stands to reason that Lenovo has the most products.'
  },
  { 
    imageUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoOhC6X0XphbIAvAzc1jtlRkyjdFNSr8wwHA&s', // Direct link to the image of the chatbot
    title: '  DELL', 
    description: 'The companys wide range of high-quality devices is a significant reason Dell is one of the top computer companies today.',
  },
  { 
    imageUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXiWqcEiTakCG9R70j4nqQ2-kJgvkVAxjxFg&s',
    title: 'ACER', 
    description: 'Acer Chromebook Spin 714 (2022) 4. SEE PRICE.',
  }
]);

// Form data
const imageUrl = ref('');
const projectTitle = ref('');
const projectDescription = ref('');

// Toggle form visibility
const showForm = ref(false);
function toggleForm() {
  showForm.value = !showForm.value;
}

// Function to add a new card
function addCard() {
  cards.value.push({ title: projectTitle.value, description: projectDescription.value, imageUrl: imageUrl.value });
  // Clear form fields
  imageUrl.value = '';
  projectTitle.value = '';
  projectDescription.value = '';
}

// Function to remove a card
function removeCard(index) {
  cards.value.splice(index, 1);
}

// Form submit handler
function handleSubmit() {
  toggleForm();
  addCard();
}


</script>



<template>
  <MyLayout>
    <div class="portfolio">
      <div class="portfolio-header">
        <h2>Portfolio</h2>
        <button class="portfolio-button" @click="toggleForm">Add</button>
      </div>
      <hr class="hr" />
      <div id="card-container">
        <!-- Render cards dynamically -->
        <div class="card" v-for="(card, index) in cards" :key="index">
          <button class="remove-button" @click="removeCard(index)">x</button>
          <div class="card-content">
            <img :src="card.imageUrl" alt="Project Image" class="small-image" />
            <div class="text-content">
              <h3 class="card-title">{{ card.title }}</h3>
              <p>{{ card.description }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Form overlay -->
    <div class="overlay" v-if="showForm">
      <div class="form-container" style="text-align: center;">
        <form @submit.prevent="handleSubmit">
          <label for="imageUrl">Image URL:</label>
          <input type="text" id="imageUrl" v-model="imageUrl" required />
          <label for="projectTitle">Project Title:</label>
          <input type="text" id="projectTitle" v-model="projectTitle" required />
          <label for="projectDescription">Project Description:</label>
          <textarea id="projectDescription" v-model="projectDescription" required></textarea>
          <button type="submit">Add Project</button>
        </form>
      </div>
    </div>
  </MyLayout>
</template>




<style scoped>
.portfolio {
  display: block;
  text-align: left;
  margin-top: 10%; 
  margin-left: auto; 
  margin-right: auto; 
  width: 60%; 
}

.portfolio h2 {
  margin-bottom: 10px;
  font-size: xx-large;
}

.hr {
  border-top: 1px solid #000000; 
}

.portfolio-header {
  display: flex;
  align-items: center;
}

.portfolio-header h2 {
  margin-right: auto;
}

.portfolio-button {
  padding: 5px 20px;
  background-color: transparent; 
  color: #000000; 
  border: 1px solid #000000; 
  border-radius: 5px;
  cursor: pointer;
  font-weight: bolder;
}

.card-title {
  font-weight: bold; 
}

.card {
  padding: 10px;
  margin-top: 10px;
  background-color: #ffffff;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.card {
  position: relative;
  border: 1px solid rgb(19, 18, 18);
  border-radius: 10px;
  padding: 10px;
  margin-bottom: 10px;
}

.remove-button {
  position: absolute;
  top: 5px;
  right: 10px;
  background: transparent;
  border: none;
  color: #999;
  cursor: pointer;
  transition: color 0.3s ease; 
}


.remove-button:hover {
  color: red; 
  font-weight: bold; 
}

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
}

 
.form-container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}

   
label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type="submit"] {
padding: 10px 20px;
background-color: #000000; 
color: white;
border: none;
border-radius: 4px;
cursor: pointer;

} 
    

button[type="submit"]:hover {
    background-color: #69abf1; 
}

.form-container {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
}

.card-content {
    display: flex;
}

.small-image {
    width: 100px; 
    height: auto; 
    margin-right: 10px; 
}


</style>
