
<template>
    <h4>Create a Item</h4>
    <form @submit.prevent="submit">
        <div>
            <label for="">Enter item name</label> <br>
            <input type="text" placeholder="enter name" v-model="form.name">
            <div v-if="form.errors.name">{{ form.errors.name }}</div>
        </div>
        <div>
            <label for="">Enter item price [optional]</label> <br>
            <input type="text" placeholder="Enter price" name="price" v-model="form.price">
            <div v-if="form.errors.price">{{ form.errors.price }}</div>
        </div>
        <BranchEnrollment v-model="form.branch" />
        <button>Update item</button>
    </form>
</template>

<script setup>
    import { useForm } from "@inertiajs/vue3";
    import BranchEnrollment from "@/Pages/branch/components/BranchEnrollment.vue";

    const props = defineProps({
        item: {
            type: Object,
            required: true,
        },
        branches: {
            type: Array,
            required: true,
        },
    });
    const form = useForm({
        name: props.item.name,
        price: props.item.price,
        branch: props.branches,
    });

    const submit = () => {
        console.log(form);
        form.post(route("item.update", props.item.id), {
            onSuccess: function(result){
                console.log(form);
                console.log(result);
                console.log("success");
            },
        });
    };
</script>
