<template>
    <h3>this is a component</h3>
    example
    <Link :href="route('index')">test</Link>
</template>

<script>
    import { Link } from '@inertiajs/vue3'
    export default{
        components: {
            Link
        }
    }
</script>
