<template>
    <Link :href="route('branch.create')">Create Branch</Link>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(branch, index) in branches" :key="branch.id">
                <td>{{ index + 1 }}</td>
                <td>{{ branch.name }}</td>
                <td>{{ branch.address }}</td>
                <td>
                    <Link :href="route('branch.edit', branch.id)" as="button">Edit</Link>
                    <Link :href="route('branch.delete', branch.id)" method="delete" as="button">Delete</Link>
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
            branches: Object
        },
        setup(){
            // console.log('branches are ', branches);
        }
    }
</script>