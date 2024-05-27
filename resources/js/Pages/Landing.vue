<script setup>
import MyLayout from '../Layouts/MyLayout.vue';

const goToClient = () => {
  // Replace this with your navigation logic
  // For example, using Vue Router:
  // router.push('/client');
};
</script>

<template>
  <MyLayout>
    <div class="about-me">
      <h2>Company Information</h2>
      <hr class="hr"/>
      <p>Our Company have a, a dedicated web developer passionate about building interactive and user-friendly websites. With a strong foundation in front-end development technologies like HTML, CSS, and JavaScript, I bring creative solutions to life. I thrive on challenges and continuously expand my skills to stay updated with the latest trends and best practices in the industry.</p>

      <!-- Buttons: Client and Portfolio -->
      <div class="buttons">
        <a href="/client" class="client-button">Client</a>
        <a href="/portfolio" class="portfolio-button">Portfolio</a>
      </div>

      <!-- Social Media Buttons -->
      <div class="social-media-buttons">
        <a href="https://www.instagram.com" class="social-media-button"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com" class="social-media-button"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com" class="social-media-button"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.linkedin.com" class="social-media-button"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </MyLayout>
</template>

<style scoped>
.about-me {
  display: block;
  text-align: left;
  margin-top: 10%; /* Adjust the top margin for vertical centering */
  margin-left: auto; /* Center horizontally */
  margin-right: auto; /* Center horizontally */
  width: 60%; /* Adjust the width as needed */
}

.about-me h2 {
  margin-bottom: 10px;
  font-size: xx-large;
}

.about-me p {
  margin-top: 20px;
  font-size: larger;
}

.hr {
  border-top: 1px solid #000000; /* Set the border color to black */
}

.buttons {
  margin-top: 70px;
  text-align: center; /* Center-align the buttons */
  gap: 10px; /* Add gap between buttons */
  font-weight: bolder;
  font-size: larger;
}

.client-button,
.portfolio-button {
  padding: 10px 50px;
  background-color: transparent; /* Make the background transparent */
  color: #000000; /* Set text color to black */
  border: 1px solid #000000; /* Add a black border */
  border-radius: 5px;
  cursor: pointer;
  font-weight: bolder; /* Make the font bold */
}

.portfolio-button:hover {
  background-color: #ffffff; /* Darker blue on hover */
}

.client-button:hover {
  background-color: #ffffff; /* Darker blue on hover */
}

.client-button {
  margin-right: 60px; /* Add margin to the right of the Client button */
}

/* Remove margin from the last button */
.portfolio-button:last-child {
  margin-right: 0;
}

.social-media-buttons {
  display: flex;
  justify-content: right; /* Center-align the icons horizontally */
  margin-top: 90px; /* Add some space between the buttons and icons */
}

.social-media-button {
  margin: 0 10px; /* Adjust spacing between buttons */
  padding: 10px;
  border-radius: 80%; /* Make the buttons circular */
  color: rgb(0, 0, 0);
  font-size: 20px;
  transition: background-color 0.3s ease; /* Add transition effect */
}

.social-media-button:hover {
  background-color: #ffffff; /* Change button background color on hover */
}
</style>
