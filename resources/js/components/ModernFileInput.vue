<template>
  <div
    class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center cursor-pointer hover:border-red-500 transition-colors"
    @dragover.prevent="onDragOver"
    @dragleave.prevent="onDragLeave"
    @drop.prevent="onDrop"
    @click="onClick"
  >
    <input
      ref="fileInput"
      type="file"
      class="hidden"
      @change="onFileChange"
      :accept="props.accept"
    />
    <div v-if="!file">
      <p class="text-gray-500">Drag & drop your file here, or click to select a file.</p>
    </div>
    <div v-else class="flex items-center justify-center">
      <p class="mr-2">{{ file.name }}</p>
      <button @click.stop="removeFile" class="text-red-500 hover:text-red-700">Remove</button>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, defineEmits, defineProps } from 'vue';

const props = defineProps({
  accept: {
    type: String,
    default: '*',
  },
});

const emit = defineEmits(['file-selected']);

const fileInput = ref<HTMLInputElement | null>(null);
const file = ref<File | null>(null);

const onDragOver = () => {
  // Add visual feedback
};

const onDragLeave = () => {
  // Remove visual feedback
};

const onDrop = (event: DragEvent) => {
  const files = event.dataTransfer?.files;
  if (files && files.length > 0) {
    file.value = files[0];
    emit('file-selected', file.value);
  }
};

const onClick = () => {
  fileInput.value?.click();
};

const onFileChange = (event: Event) => {
  const target = event.target as HTMLInputElement;
  const files = target.files;
  if (files && files.length > 0) {
    file.value = files[0];
    emit('file-selected', file.value);
  }
};

const removeFile = () => {
  file.value = null;
  emit('file-selected', null);
};
</script>