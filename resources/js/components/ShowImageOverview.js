import React, { useState } from "react";
import ReactDOM from 'react-dom';

function ShowImageOverview() {
    const [file, setFile] = useState();
  
    function handleChange(e) {
       
        setFile(URL.createObjectURL(e.target.files[0]));
        
    }
  
    return (
        <>
            <input type="file"  name="image" className="file-upload-default"  onChange={handleChange}/>
            <img src={file} style={{height: "100px", marginTop:"10px"}}/>
        </>
  
    );
}


export default ShowImageOverview;
if (document.getElementById('showimageoverview')) {
    ReactDOM.render(<ShowImageOverview />, document.getElementById('showimageoverview'));
}
