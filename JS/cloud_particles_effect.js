import  * as THREE from "../node_modules/three/build/three.module.js";

function main() {
    //location, renderer, scene
    const canvas    = document.querySelector('.area');
    const renderer  = new THREE.WebGLRenderer({canvas});
    const scene     = new THREE.Scene();
  
    //Camera perspektice
    const perspective = [75, 2, 0.1, 5];
    const camera      = new THREE.PerspectiveCamera(perspective[0], perspective[1], perspective[2], perspective[3]);
    camera.position.z = 3;
  
    let backgroundColor = new THREE.Color( 0x404040 );
    renderer.setClearColor( backgroundColor );
    
    //Add light-effekt
    const light = new THREE.DirectionalLight(0xFFFFFF, 1);
    light.position.set(-1,5,9);
    scene.add(light);
    scene.add(new THREE.AmbientLight(0xFFFFFF,1));

    //create 3D-Box
    const geometry = new THREE.SphereGeometry(3, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
    
  
    function makeInstance(geometry, color, x) {
        
        const material = new THREE.MeshBasicMaterial( {color} );
        const sphere = new THREE.Mesh( geometry, material );
        scene.add( sphere );
        return sphere;
    }
  
    const cubes = [
      makeInstance(geometry, 0xFFFFFF,  0),
    ];
  
    function resizeRendererToDisplaySize(renderer) {
      const canvas = renderer.domElement;
      const pixelRatio = window.devicePixelRatio;
      const width  = canvas.clientWidth  * pixelRatio | 0;
      const height = canvas.clientHeight * pixelRatio | 0;
      const needResize = canvas.width !== width || canvas.height !== height;
      if (needResize) {
        renderer.setSize(width, height, false);
      }
      return needResize;
    }
  
    function render(time) {
      time *= 0.001;
  
      if (resizeRendererToDisplaySize(renderer)) {
        const canvas = renderer.domElement;
        camera.aspect = canvas.clientWidth / canvas.clientHeight;
        camera.updateProjectionMatrix();
      }
  
      cubes.forEach((cube, ndx) => {
        const speed = 1 + ndx * .1;
        const rot = time * speed;
        cube.rotation.x = rot;
        cube.rotation.y = rot;
      });
  
      renderer.render(scene, camera);
      
      requestAnimationFrame(render);
    }

    
  
    requestAnimationFrame(render);
  }

  
  
  main();