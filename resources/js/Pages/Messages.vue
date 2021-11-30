<template>
    <div>
        <h1>
            Hello Page
        </h1>
        <inertia-link href="/hello">Go to Hello page</inertia-link>
        <br>
        <inertia-link href="/contact-us">Go to contact us page</inertia-link>
        <br><br><br>
        {{ messages }}
        <div v-for="message in messages" :key="message.id">
            {{ message.text }}
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            messages: Object
        }
    }
</script>

<style>

</style>
