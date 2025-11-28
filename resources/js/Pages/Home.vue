<template>
  <div class="container py-5">
    <div class="card shadow-sm p-4">
      <h3 class="text-primary">Welcome</h3>
      <p>{{ message }}</p>

      <button class="btn btn-success">Bootstrap Working ✓</button>
    </div>
  </div>
</template>

<script setup>
defineProps(['message']);
</script>