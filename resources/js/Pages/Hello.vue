<template>
    <div>
        <h1>
            Hello Page {{ message }}
        </h1>
        <h2>
            {{ message }}
        </h2>
        <inertia-link href="/messages">Go to Messages page</inertia-link>
        <br>
        <inertia-link href="/contact-us">Go to contact us page</inertia-link>
    </div>
</template>

<script>
    export default {
        props: {
            message: String
        }
    }
</script>

<style>

</style>
