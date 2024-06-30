<template>
    <Link :href="route('item.create')">Create Item</Link>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(item, index) in items" :key="item.id">
                <td>{{ index + 1 }}</td>
                <td>{{ item.name }}</td>
                <td>{{ item.price }}</td>
                <td>
                    <Link :href="route('item.edit', item.id)" as="button">Edit</Link>
                    <Link :href="route('item.delete', item.id)" method="delete" as="button">Delete</Link>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script>
    import { Link } from '@inertiajs/vue3'

    // defineProps();
    export default{
        components: {
            Link
        },
        props: {
            items: Object
        },
        setup(){
            // console.log('branches are ', branches);
        }
    }
</script>