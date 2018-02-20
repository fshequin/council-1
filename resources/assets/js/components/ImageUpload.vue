<template>
    <div class="inputfile-wrapper">
        <input class="inputfile" type="file" accept="image/*" id="file" @change="onChange">
        <label class="text-xs" for="file"><i class="fas fa-upload"></i> Choose Avatar Image</label>
    </div>
</template>

<script>
    export default {
        methods: {
            onChange(e) {
                if (! e.target.files.length) return;

                let file = e.target.files[0];

                let reader = new FileReader();

                reader.readAsDataURL(file);

                reader.onload = e => {
                    let src = e.target.result;

                    this.$emit('loaded', { src, file });
                };
            }
        }
    }
</script>
