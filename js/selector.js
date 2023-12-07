const { createApp, ref } = Vue

createApp({
  setup() {
    const gender = ref()
    const loading = ref(false)
    const initialized = ref(true)

    return {
      gender,
      loading,
      initialized
    }
  }
}).mount('#app')