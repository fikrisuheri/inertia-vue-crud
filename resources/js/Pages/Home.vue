<template>
    <AppLayout title="HOME">
        Page Home
        <inertia-link href="/about">
              <b-button variant="primary">Go About</b-button>
        </inertia-link>
    </AppLayout>
</template>
<script>
import AppLayout from '../Layout/AppLayout.vue'

export default {
    components:{
        AppLayout
    },
    props:{
        name:String
    }
}
</script>