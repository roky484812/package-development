<script setup>
    import { useForm } from "@inertiajs/vue3";

    const props = defineProps({
        branch: {
            type: Object,
            required: true,
        }
    });
    const form = useForm({
        name: props.branch.name,
        address: props.branch.address,
    });

    const submit = () => {
        console.log(form);
        form.post(route("branch.update", props.branch.id), {
            onSuccess: function(result){
                console.log(form);
                console.log(result);
                console.log("success");
            },
        });
    };
</script>

<template>
    <h4>Create a branch</h4>
    <form @submit.prevent="submit">
        <div>
            <label for="">Enter branch name</label> <br>
            <input type="text" placeholder="enter name" v-model="form.name">
            <div v-if="form.errors.name">{{ form.errors.name }}</div>
        </div>
        <div>
            <label for="">Enter branch address [optional]</label> <br>
            <input type="text" placeholder="Enter address" name="address" v-model="form.address">
            <div v-if="form.errors.address">{{ form.errors.address }}</div>
        </div>
        <button>Update Branch</button>
    </form>
</template>

