<x-layouts.mainrootlayout>
  <div class="mt-16">
    <form class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
      
      <!-- Ticket Titel -->
      <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-700">Ticket Title</label>
        <input type="text" id="title" name="title" placeholder="Enter ticket title" 
          class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-2.5 shadow-sm" required />
      </div>
      
      <!-- Beschrijving -->
      <div class="mb-5">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-700">Description</label>
        <textarea id="description" name="description" rows="4" placeholder="Describe the issue" 
          class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-2.5 shadow-sm" required></textarea>
      </div>
      
      <!-- Prioriteit -->
      <div class="mb-5">
        <label for="priority" class="block mb-2 text-sm font-medium text-gray-700">Priority</label>
        <select id="priority" name="priority" 
          class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-2.5 shadow-sm">
          <option value="low">Low</option>
          <option value="medium">Medium</option>
          <option value="high">High</option>
          <option value="urgent">Urgent</option>
        </select>
      </div>
      
      <!-- Categorie -->
      <div class="mb-5">
        <label for="category" class="block mb-2 text-sm font-medium text-gray-700">Category</label>
        <select id="category" name="category" 
          class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-2.5 shadow-sm">
          <option value="bug">Bug</option>
          <option value="feature">Feature Request</option>
          <option value="support">Support</option>
        </select>
      </div>
      
      <!-- Bestand uploaden -->
      <div class="mb-5">
        <label for="attachment" class="block mb-2 text-sm font-medium text-gray-700">Attachment (optional)</label>
        <input type="file" id="attachment" name="attachment" 
          class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded-lg file:text-sm file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200" />
      </div>
      
      <!-- Submit -->
      <button type="submit" 
        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none shadow-md">
        Create Ticket
      </button>
    </form>
  </div>
</x-layouts.mainrootlayout>
