import React from 'react';
import ReactDOM from 'react-dom';

const validEmailRegex = RegExp(
  /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
);


class ValidateInput extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      title: null,
      email: null,
      password: null,
      errors: {
        title: '',
        email: '',
        password: '',
      }
    };
  }

  handleChange = (event) => {
    event.preventDefault();
    const { name, value } = event.target;
    let errors = this.state.errors;

    switch (name) {
      case 'title': 
        errors.title = 
          value.length < 5
            ? 'Post title should be at least 5 charaters long'
            : '';
        break;
      case 'email': 
        errors.email = 
          validEmailRegex.test(value)
            ? ''
            : 'Email is not valid!';
        break;
      case 'password': 
        errors.password = 
          value.length < 8
            ? 'Password must be at least 8 characters long!'
            : '';
        break;
      default:
        break;
    }

    this.setState({errors, [name]: value});
  }

   render() {
    const {errors} = this.state;
    return (
      <>
         
         <input value="{{old('title')}}" type="text" className="form-control" id="exampleInputName1" placeholder="Post title" name="title" required="required" onChange={this.handleChange}/>
         {errors.title.length > 0 && <span className='errors'>{errors.title}</span>}    

        </>
    );
  }
}


export default ValidateInput;

if (document.getElementById('validateinput')) {
    ReactDOM.render(<ValidateInput />, document.getElementById('validateinput'));
}
