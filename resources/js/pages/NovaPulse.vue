<template>
  <div>

    <Head title="Pulse" />
    <Card class="flex flex-col items-center justify-center">
      <iframe :src="this.pulse" class="w-full aspect-auto" frameborder="0" scrolling="auto"></iframe>
    </Card>
  </div>
</template>

<script>
export default {

  data() {
    return {
      pulse: Nova.config('tool').pulse,
    }
  },

}
</script>


<style>
iframe {
  height: 90vh;
}
</style>