import React from 'react';
import ReactDOM from 'react-dom';
import "./taginput.css"

class TagInput extends React.Component {
  constructor() {
    super();
    
    this.state = {
      tags: [
        'Tags',
        'Input'
      ]
    };
  }
  
  removeTag = (i) => {
    const newTags = [ ...this.state.tags ];
    newTags.splice(i, 1);
    this.setState({ tags: newTags });
  }

  inputKeyDown = (e) => {
    const val = e.target.value;
    if (e.key === 'Enter' && val) {
      if (this.state.tags.find(tag => tag.toLowerCase() === val.toLowerCase())) {
        return;
      }
      this.setState({ tags: [...this.state.tags, val]});
      this.tagInput.value = null;
    } else if (e.key === 'Backspace' && !val) {
      this.removeTag(this.state.tags.length - 1);
    }
  }

  render() {
    const { tags } = this.state;

    return (
      <div className="form-group">
        <label for="exampleInputtags">Tags</label>
        <ul className="input-tag__tags">
          { tags.map((tag, i) => (
            <li key={tag}>
              {tag}
              <button type="button" onClick={() => { this.removeTag(i); }}>+</button>
            </li>
          ))}
          <li className="input-tag__tags__input"><input id="exampleInputtags" className="form-control" type="text" onKeyDown={this.inputKeyDown} ref={c => { this.tagInput = c; }} name="post_tags"/></li>
        </ul>
      </div>
    );
  }
}


export default TagInput;

if (document.getElementById('tag')) {
    ReactDOM.render(<TagInput />, document.getElementById('tag'));
}
