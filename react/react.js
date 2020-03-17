(function() {
    class MyHTMLComponent extends React.Component {

        constructor(props) {
            super(props);
            this.count = 0;
            this.addOneOne = this.addOne.bind(this);
        }

        addOne() {
            this.setState(() => this.count ++);
        }

        render() {
            return(
                <div>
                    <h1>Test title</h1>
                    <button>Woop Woop</button>
                    <h2>{ this.props.extraText}</h2>

                    <button onClick={this.addOneOne}>Click to add one to the sun</button>
                    Count: {this.count}
                </div>
                
            );
        }
    }

    ReactDOM.render(<MyHTMLComponent extraText="Some text"></MyHTMLComponent>, document.getElementById('container'));
})();