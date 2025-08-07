<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - Kasir Apps</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body
    x-data="{ 
      darkMode: false, 
      sidebarToggle: false,
      page: 'ecommerce',
      loaded: true 
    }"
    x-init="
      darkMode = JSON.parse(localStorage.getItem('darkMode') || 'false');
      $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))
    "
    :class="{'dark bg-gray-900': darkMode === true}"
    class="bg-gray-50"
  >
    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
      <!-- ===== Sidebar Start ===== -->
      @include('sidebar')
      <!-- ===== Sidebar End ===== -->

      <!-- ===== Content Area Start ===== -->
      <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
        <!-- ===== Header Start ===== -->
        @include('header')
        <!-- ===== Header End ===== -->

        <!-- ===== Main Content Start ===== -->
        <main class="flex-1 p-6">
          <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
            <p class="text-gray-600">Selamat datang di Kasir Apps</p>
              </div>

          <!-- Metric Cards -->
          @include('partials.metric-group.metric-group-01')

          <!-- Chart One -->
          @include('partials.chart.chart-01')

          <!-- Recent Transactions -->
          <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b">
              <h2 class="text-lg font-semibold text-gray-900">Transaksi Terbaru</h2>
              </div>
            <div class="p-6">
              <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pelanggan</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produk</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#TRX001</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">John Doe</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Laptop Asus</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 8.500.000</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#TRX002</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Jane Smith</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Mouse Wireless</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 250.000</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#TRX003</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Bob Johnson</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Keyboard Mechanical</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 1.200.000</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
  </body>
</html>
