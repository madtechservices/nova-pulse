<template>
    <div>
      <Head title="Nova Pulse" />
      <Card class="flex flex-col items-center justify-center">
        <iframe :src="pulseUrl" class="w-full aspect-auto" frameborder="0" scrolling="auto"></iframe>
      </Card>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        pulseUrl: '/nova/nova-pulse', // Match the route
      };
    },
  };
  </script>

  <style>
  iframe {
    height: 90vh;
  }
  </style>
