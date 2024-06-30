<template>
    <h1>
        This is a layout
    </h1>
    <ul>
        <li>
            <Link :href="route('branch.index')">Branch</Link>
        </li>
        <li>
            <Link :href="route('item.index')">Item</Link>
        </li>
    </ul>
    <slot/>
</template>

<script>
    import { Link } from "@inertiajs/vue3";
    export default {
        components :{
            Link
        },
        name: 'Layout'
    }
</script>
