import React, { useState } from 'react';

const ClinicalData = () => {
  const [formData, setFormData] = useState({
    name: '',
    age: '',
    heart_rate: '',
    blood_pressure: '',
    diagnosis: '',
    prescription: ''
  });

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData({
      ...formData,
      [name]: value
    });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    fetch('http://localhost:8012/src/index.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: new URLSearchParams(formData)
    })
    .then(response => response.text())
    .then(data => {
      console.log(data);
      alert(data); // Add alert to show response
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Error: ' + error); // Add alert to show error
    });
  };

  return (
    <div className='ml-[20%] grid grid-cols-2 h-[100vh]'>
      <div className='px-14 pt-24 bg-white shadow-lg w-full mx-auto'>
        <h1 className='text-3xl font-extrabold text-black mb-6'>Clinical Data</h1>
        <form className='space-y-5' onSubmit={handleSubmit}>
          <div>
            <label className='block text-sm font-medium text-gray-700'>Name</label>
            <input type='text' name='name' className='mt-1 block w-full p-2 border border-gray-300 rounded-md' onChange={handleChange} />
          </div>

          <div>
            <label className='block text-sm font-medium text-gray-700'>Age</label>
            <input type='number' name='age' className='mt-1 block w-full p-2 border border-gray-300 rounded-md' onChange={handleChange} />
          </div>

          <div>
            <label className='block text-sm font-medium text-gray-700'>Heart Rate</label>
            <input type='number' name='heart_rate' className='mt-1 block w-full p-2 border border-gray-300 rounded-md' onChange={handleChange} />
          </div>

          <div>
            <label className='block text-sm font-medium text-gray-700'>Blood Pressure</label>
            <input type='number' name='blood_pressure' className='mt-1 block w-full p-2 border border-gray-300 rounded-md' onChange={handleChange} />
          </div>

          <div>
            <label className='block text-sm font-medium text-gray-700'>Diagnosis</label>
            <input type='text' name='diagnosis' className='mt-1 block w-full p-2 border border-gray-300 rounded-md' onChange={handleChange} />
          </div>

          <div>
            <label className='block text-sm font-medium text-gray-700'>Prescription</label>
            <input type='text' name='prescription' className='mt-1 block w-full p-2 border border-gray-300 rounded-md' onChange={handleChange} />
          </div>

          <button type='submit' className='w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700'>
            Save Report
          </button>
        </form>
      </div>
    </div>
  );
};

export default ClinicalData;
