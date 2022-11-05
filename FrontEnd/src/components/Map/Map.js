import { withGoogleMap, withScriptjs, GoogleMap, Marker } from 'react-google-maps';

function Map() {
   console.log('render map');
   return (
      <div>
         <GoogleMap defaultZoom={15} defaultCenter={{ lat: 10.766992, lng: 106.653257 }}>
            <Marker
               // icon={{
               //    url: 'https://insulationpads.co.uk/wp-content/uploads/2017/10/Home.png',
               //    scaledSize: new window.google.maps.Size(40, 40),
               // }}
               position={{ lat: 10.766992, lng: 106.653257 }}
            />
         </GoogleMap>
      </div>
   );
}

export default withScriptjs(withGoogleMap(Map));
