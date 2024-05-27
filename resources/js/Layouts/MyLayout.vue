<script>
import { Link } from '@inertiajs/vue3';
</script>

<template>

<div id="main-wrapper">
    <div id="sidebar" class="min-w-[300px] bg-white-900 flex flex-col items-center">
      <div id="profile" style="width: 100%;">
        <img src="data:image/png;base64,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" alt="Profile Img" style="width: 100%; height: 100%; object-fit: cover;">
      </div>

      <div class="description" style="text-align: center;">
        <h2 style="font-size: 24px; margin-bottom: 10px;">Computer Company</h2>
        <p style="font-size: 18px; margin-bottom: 20px;">Nationwide</p>

        <!-- Email Me Button -->
        <button class="contact-button" style="font-size: 15px;">EMAIL ME</button>
     </div>



    </div>
    <div id="content" class="flex flex-col flex-1">
      <div class="flex-1 bg-gray-200">
        
        <slot/>
      </div>
      <!-- <footer class="py-4 text-center text-gray-600">
      </footer> -->
    </div>
</div>
</template>
  

  
<style scoped>
#main-wrapper {
  min-height: 100vh;
  display: flex;
}

#profile img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.portfolio-container {
  display: block;
  justify-content: space-between;
  margin: 20px;
}

.profile-container {
  flex: 1;
}

.profile-picture {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.description {
  margin-top: 50px;
  text-align: center;
}


.contact-button {
  margin-top: 90px;
  padding: 10px 70px;
  background-color: #000000;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

#sidebar {
  min-width: 9vh;
  max-width: 90vh; 
}

#content {
  flex: 1;
}
</style>
