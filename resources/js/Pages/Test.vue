<template>
        <h3>this is a component</h3>
    Testings
    <Link :href="route('example')">example</Link>
</template>

<script>
    import { Link } from '@inertiajs/vue3'
    export default{
        components: {
            Link
        }
    }
</script>
