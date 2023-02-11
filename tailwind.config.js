
module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/views/*.blade.php',
    ],

    plugins: [
      require("daisyui"),
      
    ],
    
    daisyui: {
        styled: true,
         themes: [
            {
              mytheme: {
              
                'primary': '#5D4FFF',
                'primary-focus': '#4506cb',
                'primary-content': 'white',
                'secondary': '#FAF9FC',
                'secondary-focus': '#FAF9FC',
                'secondary-content': '#5D4FFF',
                'accent': '#37cdbe',
                'accent-focus': '#2aa79b',
                'accent-content': '#ffffff',
                'neutral': '#3d4451',
                'neutral-focus': '#2a2e37',
                'neutral-content': '#ffffff',
                'base-100': '#FAF9FC',
                
                'info': '#2094f3',
                'success': '#009485',
                'warning': '#ff9900',
                'error': '#ff5724',
                    },
                    },
                ],
        base: true,
        utils: true,
        logs: true,
        rtl: false,

  
      },
};
